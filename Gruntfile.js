module.exports = function (grunt) {

    grunt.initConfig({

        pkg: grunt.file.readJSON('package.json'),
        plg: grunt.file.readJSON('plugin.json'),
        
        
        clean: {
            main: ['<%= plg.plugin.slug %>__package'],
            testarea: ['testarea']
            //release: ['path/to/another/dir/one', 'path/to/another/dir/two']
        },
        
        copy: {
            main: {
                files: [

                    {
                        src: 'src/assets/sass/your_plugin_admin.scss',
                        dest: '<%= plg.plugin.slug %>__package/src/assets/sass/<%= plg.plugin.slug %>_admin.scss'
                    },
                    {
                        src: 'src/assets/sass/your_plugin.scss',
                        dest: '<%= plg.plugin.slug %>__package/src/assets/sass/<%= plg.plugin.slug %>.scss'
                    },
                    {
                        src: 'src/assets/css/your_plugin_admin.css',
                        dest: '<%= plg.plugin.slug %>__package/src/assets/css/<%= plg.plugin.slug %>_admin.css'
                    },
                    {
                        src: 'src/assets/css/your_plugin.css',
                        dest: '<%= plg.plugin.slug %>__package/src/assets/css/<%= plg.plugin.slug %>.css'
                    },
                    {
                        src: 'src/assets/js/your_plugin.js',
                        dest: '<%= plg.plugin.slug %>__package/src/assets/js/<%= plg.plugin.slug %>.js'
                    }
                ],
            },
            testarea: {
                files: [
                    {expand: true, cwd: 'src/', src: ['**'], dest: 'testarea/src/'},
                    {
                        src: 'Gruntfile.js',
                        dest: 'testarea/Gruntfile.js'
                    },
                    {
                        src: 'package.json',
                        dest: 'testarea/package.json'
                    },
                    {
                        src: 'plugin.json',
                        dest: 'testarea/plugin.json'
                    }
                ],
            },
        },
        
        'string-replace': {
            dist: {
                files: {
                    '<%= plg.plugin.slug %>__package/src/includes/class.<%= plg.plugin.slug %>.php': 'src/includes/class.your_plugin.php',
                    '<%= plg.plugin.slug %>__package/src/includes/class.<%= plg.plugin.slug %>_admin.php': 'src/includes/class.your_plugin_admin.php',
                    '<%= plg.plugin.slug %>__package/src/includes/class.<%= plg.plugin.slug %>_public.php': 'src/includes/class.your_plugin_public.php',
                    
                    '<%= plg.plugin.slug %>__package/src/views/admin.php': 'src/views/admin.php',
                    '<%= plg.plugin.slug %>__package/src/views/public.php': 'src/views/public.php',
                    
                    '<%= plg.plugin.slug %>__package/src/defines.php': 'src/defines.php',
                    '<%= plg.plugin.slug %>__package/src/<%= plg.plugin.slug %>.php': 'src/your_plugin.php',
                    
                    '<%= plg.plugin.slug %>__package/Gruntfile.js': 'src/_Gruntfile.js',
                    '<%= plg.plugin.slug %>__package/package.json': 'src/_package.json'
                    
                },
                options: {
                    replacements: [
                        {
                            pattern: /{{PLUGIN_CONSTANT_BASENAME}}/g,
                            replacement: "<%= plg.plugin.constant_base_name %>",
                        }, 
                        {
                            pattern: /{{PLUGIN_SLUG}}/g,
                            replacement: "<%= plg.plugin.slug %>",
                        }, 
                        {
                            pattern: /{{PLUGIN}}/g,
                            replacement: "<%= plg.plugin.name %>",
                        },
                        {
                            pattern: /{{MAINCLASSNAME}}/g,
                            replacement: "<%= plg.plugin.main_class_name %>",
                        },
                        {
                            pattern: /{{PLUGIN_SCRIPT_ID}}/g,
                            replacement: "<%= plg.plugin.script_id %>",
                        },
                        {
                            pattern: /{{PLUGIN_STYLE_ID}}/g,
                            replacement: "<%= plg.plugin.style_id %>",
                        },
                        {
                            pattern: /{{TEXTDOMAIN}}/g,
                            replacement: "<%= plg.plugin.text_domain %>",
                        },
                        {
                            pattern: /{{PLUGIN_AUTHOR}}/g,
                            replacement: "<%= plg.author.name %> | <%= plg.author.url %> | <%= plg.author.email %>",
                        },
                        {
                            pattern: /{{PLUGIN_AUTHOR_NAME}}/g,
                            replacement: "<%= plg.author.name %>",
                        },
                        {
                            pattern: /{{PLUGIN_DESCRIPTION}}/g,
                            replacement: "<%= plg.plugin.description %>",
                        },
                        {
                            pattern: /{{PLUGIN_VERSION}}/g,
                            replacement: "<%= plg.plugin.version %>",
                        },
                        {
                            pattern: /{{PLUGIN_LICENSE}}/g,
                            replacement: "<%= plg.plugin.license %>",
                        }
                    ]
                }
            }
        }
        
    });
    
    grunt.loadNpmTasks('grunt-contrib-clean');
    grunt.loadNpmTasks('grunt-contrib-copy');
    grunt.loadNpmTasks('grunt-string-replace');

    // Developing Tasks
    
    grunt.registerTask('default', function() {
        
        var pkg = grunt.file.readJSON('package.json');
        
        if(!pkg) {
            grunt.log.errorlns('ERROR!');
            grunt.log.errorlns('"package.json" file is required!');
            grunt.fatal('Operation stopped');
        }
        
        grunt.log.subhead('WP PLUGIN GENERATOR ');
        grunt.log.writeln('*************************************');
        grunt.log.oklns('Version running: ' + pkg.version);
        grunt.log.oklns('See more at : ' + pkg.home);
        grunt.log.writeln(' ');
        grunt.log.writeln('USAGE');
        grunt.log.writeln('1) configure new plugin paramters editing the file "plugin.json"');
        grunt.log.writeln('2) run the Grunt command "$ grunt generate"');
        grunt.log.writeln('3) go to the new "your_pluginame__package" directory');
        grunt.log.writeln('4) start coding your new plugin on "src" directory');
        grunt.log.writeln(' ');
        grunt.log.errorlns('ERROR!');
        grunt.log.errorlns('In order to generate a new plugin, please type "$ grunt generate"');
        
    });
    
    grunt.registerTask('info', function() {
        

        
        grunt.log.subhead('WP PLUGIN GENERATOR ');
        grunt.log.writeln('*************************************');
        grunt.log.writeln(' ');
        grunt.log.writeln('USAGE');
        grunt.log.writeln('1) configure new plugin paramters editing the file "plugin.json"');
        grunt.log.writeln('2) run the Grunt command "$ grunt generate"');
        grunt.log.writeln('3) go to the new "your_pluginame__package" directory');
        grunt.log.writeln('4) start coding your new plugin on "src" directory');
        grunt.log.writeln(' ');
        
        
    });
    
    grunt.registerTask('generate', function() {
        
        grunt.log.subhead('WP PLUGIN GENERATOR ');
        grunt.log.writeln('*************************************');
        grunt.log.writeln(' ');
        grunt.log.writeln('Start new plugin generation');
        
        var pkg = grunt.file.readJSON('package.json');
        var plg = grunt.file.readJSON('plugin.json');
        
        if(!pkg) {
            grunt.log.errorlns('ERROR!');
            grunt.log.errorlns('"package.json" file is required!');
            grunt.fatal('Operation stopped');
        }
        
        if(!pkg) {
            grunt.log.errorlns('ERROR!');
            grunt.log.errorlns('"plugin.json" file is required!');
            grunt.log.errorlns('Be sure to have a well configured "plugin.json" file at the same level of the Gruntfile.js');
            grunt.fatal('Operation stopped');
        }
        
        grunt.task.run([
            'clean:main',
            'copy:main',
            'string-replace'
        ]);
    });
    
    grunt.registerTask('testarea',function () {
        
        grunt.log.subhead('WP PLUGIN GENERATOR ');
        grunt.log.writeln('*************************************');
        grunt.log.oklns('Command: $ grunt testarea');
        grunt.log.writeln('This command is for debugging only! You don\'t need to use this for your plugin generation.');
        grunt.log.writeln('Type "$ grunt" for more infos or "$ grunt generate" to start plugin generation.');
        
        grunt.task.run([
            'clean:testarea',
            'copy:testarea'
        ]);
        
    });
        
};

