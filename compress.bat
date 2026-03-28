@echo off
REM =========================================================
REM  Compressor de Vídeos Web — Rekintsu Pilates
REM  Pré-requisito: FFmpeg instalado e no PATH
REM  Download: https://ffmpeg.org/download.html
REM  Ou instale via winget: winget install ffmpeg
REM =========================================================

set INPUT_DIR=site\assets\img
set OUTPUT_DIR=site\assets\video

echo Comprimindo videos para web...

REM hero — 720p, ~2-4 MB, loop perfeito para background
ffmpeg -i "%INPUT_DIR%\video-studio.mp4" ^
  -vf "scale=1280:-2,fps=25" ^
  -vcodec libx264 -crf 28 -preset slow ^
  -profile:v baseline -level 3.0 ^
  -pix_fmt yuv420p ^
  -an ^
  -movflags +faststart ^
  "%OUTPUT_DIR%\hero-bg.mp4"

REM video2 — compressao padrao
ffmpeg -i "%INPUT_DIR%\video2.mp4" ^
  -vf "scale=1280:-2,fps=25" ^
  -vcodec libx264 -crf 28 -preset slow ^
  -profile:v baseline -level 3.0 ^
  -pix_fmt yuv420p ^
  -an ^
  -movflags +faststart ^
  "%OUTPUT_DIR%\video2-web.mp4"

REM video3 — compressao padrao
ffmpeg -i "%INPUT_DIR%\video3.mp4" ^
  -vf "scale=1280:-2,fps=25" ^
  -vcodec libx264 -crf 28 -preset slow ^
  -profile:v baseline -level 3.0 ^
  -pix_fmt yuv420p ^
  -an ^
  -movflags +faststart ^
  "%OUTPUT_DIR%\video3-web.mp4"

echo.
echo Pronto! Arquivos salvos em %OUTPUT_DIR%
echo Tamanhos:
dir "%OUTPUT_DIR%\*.mp4" | findstr ".mp4"
pause
