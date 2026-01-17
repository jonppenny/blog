# Copilot Instructions for JonPPenny Blog

## Project Overview
Laravel 12 personal blog with a retro "BIOS-style" theme. Two-tier architecture: public-facing blog and authenticated admin dashboard.

## Architecture

### Controller Organization
- `App\Http\Controllers\Front\` – Public routes (IndexController)
- `App\Http\Controllers\Admin\` – Admin dashboard (PostController, PageController, AccountController)
- `App\Http\Controllers\Auth\` – Single-action invokable controllers (Login, Logout, Register)

### Blade Components & Layouts
- `resources/views/components/layout.blade.php` – Public site layout with retro BIOS theme
- `resources/views/components/admin.blade.php` – Admin dashboard layout (dark Bootstrap theme)
- Use `<x-layout>` for public pages, `<x-admin>` for admin pages
- Pass page title via `<x-slot:title>Page Title</x-slot:title>`

### Database
- SQLite at `database/database.sqlite`
- Models: `User`, `Post` (has user_id, title, slug, body), `Page`
- Posts belong to users via `user_id` foreign key

## Development Workflow

### Starting Development Server
```bash
composer dev
```
Runs concurrently: Laravel server, queue listener, Pail logs, and Vite.

### Running Tests
```bash
composer test
```
Uses PHPUnit with in-memory SQLite for testing.

### Project Setup (Fresh Clone)
```bash
composer setup
```
Installs deps, generates key, runs migrations, and builds assets.

## Code Patterns

### View Paths
Use forward-slash syntax in controllers: `return view('admin/posts', [...])` not dot notation.

### Pagination Pattern
```php
$posts = Post::latest()->paginate(10)->withQueryString();
return view('admin/posts', ['posts' => $posts]);
```

### Auth Controller Pattern (Single-Action)
Auth controllers use `__invoke()` method for single responsibility:
```php
class Login extends Controller
{
    public function __invoke(Request $request) { ... }
}
```

### Validation in Controllers
Inline validation with `$request->validate()`, not Form Requests.

## Frontend Stack
- **CSS**: Bootstrap 5 + custom SCSS in `resources/css/`
- **JS**: Vite + axios (via `resources/js/bootstrap.js`)
- Public site uses custom BIOS-blue theme variables in `app.scss`
- Admin uses dark Bootstrap theme with CKEditor dark mode styles in `admin.scss`

## Key Files
- `routes/web.php` – All routes (public + admin + auth)
- `composer.json` scripts – `dev`, `test`, `setup` commands
- `vite.config.js` – Entry points: `app.scss`, `app.js`
