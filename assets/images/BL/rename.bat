@echo off
setlocal enabledelayedexpansion
set i=1
for %%f in (*.jpg) do (
    ren "%%f" "img!i!.jpg"
    set /a i+=1
)