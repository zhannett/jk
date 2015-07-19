@echo off
REM This command implements YUI compressor for CSS jk.css to jk-mn.css
java -jar ../yuicompressor-2.4.2.jar ../css/jk.css -o ../css/jk-min.css utf-8