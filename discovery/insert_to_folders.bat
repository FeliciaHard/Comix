@echo off
setlocal

rem Specify the path of the parent directory where the folders are located
set "parentDir=F:\xampp\htdocs\Comic\main\php\dashboard\display-comixs\page\comix_content"

rem Specify the name of the new folder you want to create
set "newFolderName=cover"

rem Loop through each folder in the parent directory
for /d %%F in ("%parentDir%\*") do (
    mkdir "%%F\%newFolderName%"
)

echo Folders created successfully!
pause
