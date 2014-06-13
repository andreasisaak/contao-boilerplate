# Require any additional compass plugins here.

# http://stackoverflow.com/a/15766439
require "./remove-all-comments"

# Set this to the root of your project when deployed:
http_path = "/"
css_dir = "files/standard/layout/css"
sass_dir = "files/standard/layout/scss"
images_dir = "files/standard/layout/images"
javascripts_dir = "files/standard/layout/js"
encoding = "UTF-8"

# More infos about Contao and Sass/Compass
# www.mediendepot-ruhr.de/sassscss-und-compass-als-css-preprocessor.html

# You can select your preferred output style here (can be overridden via the command line):
# output_style = :expanded or :nested or :compact or :compressed
output_style = :compressed

# Set specific rules only in development mode
# How to use: 
# https://gist.github.com/andreasisaak/814f251192828eb295b5
environment = :development

# To enable relative paths to assets via compass helper functions. Uncomment:
relative_assets = true

# To disable debugging comments that display the original location of your selectors. Uncomment:
line_comments = false

# The cache_path is relative to the config.rb file and not the project_path or http_path.
cache_path = 'system/tmp/.sass-cache'

# Enable Debugging (Line Comments, FireSass)
# Invoke from command line: compass watch -e development --force
if environment == :development
  line_comments = true
  output_style = :expanded
end