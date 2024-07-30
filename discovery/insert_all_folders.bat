@echo off
:: Loop through each subdirectory in the specified directory
:: Replace "-- Insert folder path to be copy/replace --" with the actual path
:: Replace "-- Insert file path that want to copy/replace --" with the actual file path
for /D %%a in ("-- Insert folder path to be copy/replace --\*") do (
    :: Copy 'index.php' to each subdirectory, overwriting any existing file with the same name
    xcopy /y "-- Insert file path that want to copy/replace --" "%%a\"
)

:: Command to run in Command Prompt (single percent signs for immediate execution)
:: Replace "-- Insert folder path to be copy/replace --" with the actual path
:: Replace "-- Insert file path that want to copy/replace --" with the actual file path
:: Example usage: for /D %a in ("-- Insert folder path to be copy/replace --\*") do xcopy /y "-- Insert file path that want to copy/replace --" "%a\"
