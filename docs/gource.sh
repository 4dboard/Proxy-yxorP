gource -s 1 -e 0.1 --high-dpi   -800x600  --auto-skip-seconds 0.1  --bloom-multiplier 0.85  --bloom-intensity 0.85 --stop-at-end    --date-format "%d/%m/%y"  --hide mouse,filenames  --file-idle-time 0  --max-files 0      --background-image './world.jpg' --logo './logo-small.png'  --font-size 16  --output-ppm-stream -  --output-framerate 30  |  ffmpeg -y -r 30 -f image2pipe -vcodec ppm -i - -b 6536K './movie2.mp4'