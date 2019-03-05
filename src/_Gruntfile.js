module.exports = function (grunt) {

    grunt.initConfig({
        
        pkg: grunt.file.readJSON('package.json'),

        sass: {  

            dist: {
                files: [{
                    expand: true,
                    cwd: 'src/assets/sass',
                    src: ['*.scss'],
                    dest: 'src/assets/css',
                    ext: '.css'
                }]
            }
        },
        watch: {
            files: ['src/assets/sass/**/*.scss'],
            tasks: ['sass_compile']
        },
        compress: {
            dist: {
                options: {
                    archive: 'dist/{{PLUGIN_SLUG}}.zip'
                },
                files: [
                    {
                        expand: true,
                        cwd: 'src/',
                        src: ['**'],
                        dest: '{{PLUGIN_SLUG}}'
                    }, // makes all src relative to cwd
                ]
            }
        }
    });
    
    
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-compress');
    
    // Developing Tasks
    grunt.registerTask('sass_compile', ['sass']);
    grunt.registerTask('default', ['sass','watch']);
    
};