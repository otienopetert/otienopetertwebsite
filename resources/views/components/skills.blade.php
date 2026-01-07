<section id="skills" class="py-20 bg-gradient-to-br from-blue-50 to-purple-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16 fade-on-scroll">
            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-4">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">Skills & Technologies</span>
            </h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                The tools and technologies I use to bring ideas to life.
            </p>
        </div>

        <!-- Skills Grid -->
        <div class="space-y-12">
            @foreach($skills as $category => $skillList)
            <div class="fade-on-scroll">
                <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center md:text-left">{{ $category }}</h3>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    @foreach($skillList as $skill)
                    <div class="group">
                        <div class="relative overflow-hidden rounded-xl {{ $skill['color'] }} p-6 text-center transform transition-all duration-300 hover:scale-110 hover:shadow-2xl hover:rotate-2">
                            <p class="text-white font-semibold text-sm md:text-base">{{ $skill['name'] }}</p>
                            <div class="absolute inset-0 bg-gradient-to-br from-white/0 to-white/20 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        <!-- Additional Info -->
        <div class="mt-16 text-center fade-on-scroll">
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                I'm always learning and exploring new technologies to stay current with industry trends and best practices.
            </p>
        </div>
    </div>
</section>
