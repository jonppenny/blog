<x-layout>

    <x-slot:title>
        About
    </x-slot:title>

    {{-- Posts list --}}
    <div class="d-flex flex-column flex-lg-row align-items-stretch justify-content-between gap-1 mb-1 bios-box-wrapper">
        <div class="p-5 bios-box">
            <h1>About</h1>
            <p>Hi there! I'm Jon, a senior developer with over 20 years of experience building websites, platforms, and tools, with a focus on speed, efficiency, and security. I work mainly with PHP (Drupal, Symfony, WordPress), JavaScript, and MySQL, and I tend to lean toward the server side of development.</p>
            <p>I also manage servers across both Linux (DigitalOcean, AWS) and Windows (Windows Server, Azure). I'm just as comfortable in the command line as I am using a GUI (usually Plesk).</p>
            <p>Over the years I've been lucky enough to work on projects for Dyson, BBC, Marvel, Disney, Cartoon Network, the Welsh Government, and the National Oceanography Centre. This blog is where I share things I've learned, problems I've solved, and the occasional experiment that didn't go to plan.</p>
            <p>I'm an unashamed Linux user and a big advocate for open-source software, and I try to use and support open-source projects wherever possible.</p>
            <p>I love learning new technologies and am currently exploring Laravel (which this site is built on) and Go, where I'm tinkering with several side projects.</p>
            <p>Head to the <a href="/contact">Contact Page</a> if you'd like to get in touch, or visit my <a href="https://github.com/jonppenny" target="_blank">Github</a> to view some of the things I'm working on.</p>
        </div>
        <div class="p-5 bios-box">
            @include('components.side-panel')
        </div>
    </div>

</x-layout>
