<section id="projects" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 fade-on-scroll">
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-4">
                <span class="bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent">My Projects</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                A collection of projects that showcase my skills and passion for building amazing things.
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($projects as $project)
            <div class="project-card group bg-white rounded-2xl shadow-lg hover:shadow-2xl overflow-hidden fade-on-scroll">
                <!-- Project Image -->
                <div class="relative h-48 overflow-hidden">
                    <img src="{{ $project['image'] }}" alt="{{ $project['title'] }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                    <div class="absolute inset-0 bg-gradient-to-br {{ $project['gradient'] }} opacity-0 group-hover:opacity-90 transition-opacity duration-300 flex items-center justify-center">
                        <div class="flex gap-4">
                            <a href="{{ $project['demo_url'] }}" target="_blank" class="p-3 bg-white rounded-full text-purple-600 hover:scale-110 transform transition-transform">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                            <a href="{{ $project['github_url'] }}" target="_blank" class="p-3 bg-white rounded-full text-purple-600 hover:scale-110 transform transition-transform">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 0C5.37 0 0 5.37 0 12c0 5.31 3.435 9.795 8.205 11.385.6.105.825-.255.825-.57 0-.285-.015-1.23-.015-2.235-3.015.555-3.795-.735-4.035-1.41-.135-.345-.72-1.41-1.23-1.695-.42-.225-1.02-.78-.015-.795.945-.015 1.62.87 1.845 1.23 1.08 1.815 2.805 1.305 3.495.99.105-.78.42-1.305.765-1.605-2.67-.3-5.46-1.335-5.46-5.925 0-1.305.465-2.385 1.23-3.225-.12-.3-.54-1.53.12-3.18 0 0 1.005-.315 3.3 1.23.96-.27 1.98-.405 3-.405s2.04.135 3 .405c2.295-1.56 3.3-1.23 3.3-1.23.66 1.65.24 2.88.12 3.18.765.84 1.23 1.905 1.23 3.225 0 4.605-2.805 5.625-5.475 5.925.435.375.81 1.095.81 2.22 0 1.605-.015 2.895-.015 3.3 0 .315.225.69.825.57A12.02 12.02 0 0024 12c0-6.63-5.37-12-12-12z"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Project Info -->
                <div class="p-6">
                    <h3 class="text-2xl font-bold mb-3 text-gray-900">{{ $project['title'] }}</h3>
                    <p class="text-gray-600 mb-4 line-clamp-3">{{ $project['description'] }}</p>

                    <!-- Tech Stack -->
                    <div class="flex flex-wrap gap-2">
                        @foreach($project['tech_stack'] as $tech)
                        <span class="px-3 py-1 text-xs font-semibold rounded-full bg-gradient-to-r {{ $project['gradient'] }} text-white">
                            {{ $tech }}
                        </span>
                        @endforeach
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
