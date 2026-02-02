/**
 * Custom Upload Adapter for CKEditor 5
 * Handles image uploads to Laravel backend
 */

class CKEditorUploadAdapter {
    constructor(loader, uploadUrl, csrfToken) {
        this.loader = loader;
        this.uploadUrl = uploadUrl;
        this.csrfToken = csrfToken;
    }

    upload() {
        return this.loader.file
            .then(file => new Promise((resolve, reject) => {
                const data = new FormData();
                data.append('upload', file);
                data.append('_token', this.csrfToken);

                fetch(this.uploadUrl, {
                    method: 'POST',
                    body: data
                })
                .then(response => response.json())
                .then(result => {
                    if (result.url) {
                        resolve({
                            default: result.url
                        });
                    } else {
                        reject(result.error || 'Upload failed');
                    }
                })
                .catch(error => {
                    reject('Upload failed: ' + error);
                });
            }));
    }

    abort() {
        // Handle abort if needed
    }
}

/**
 * Plugin factory function for CKEditor
 * @param {string} uploadUrl - The URL endpoint for image uploads
 * @param {string} csrfToken - Laravel CSRF token
 * @returns {function} Plugin function for CKEditor
 */
function createCKEditorUploadAdapterPlugin(uploadUrl, csrfToken) {
    return function(editor) {
        editor.plugins.get('FileRepository').createUploadAdapter = (loader) => {
            return new CKEditorUploadAdapter(loader, uploadUrl, csrfToken);
        };
    };
}

// Make the function globally available
if (typeof window !== 'undefined') {
    window.createCKEditorUploadAdapterPlugin = createCKEditorUploadAdapterPlugin;
}
