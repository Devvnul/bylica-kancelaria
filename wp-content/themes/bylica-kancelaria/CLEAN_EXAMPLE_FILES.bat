@echo off
setlocal enabledelayedexpansion

:: Delete the README.md file from the same directory
if exist "README.md" (
    echo Deleting file: README.md
    del "README.md"
)

:: Function to delete files with "example" in their filename
for /r %%f in (*example*) do (
    echo Deleting file: %%f
    del "%%f"
)

:: Schedule the script to delete itself
set "script_path=%~f0"
schtasks /create /tn "DeleteSelf" /tr "cmd /c del /q %script_path%" /sc once /st 00:00

:: Run the scheduled task immediately to delete the script
schtasks /run /tn "DeleteSelf"

:: Cleanup the scheduled task
schtasks /delete /tn "DeleteSelf" /f
