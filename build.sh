#!/bin/bash
# glyphIgo.py를 설치했는지 확인하고 설치하지 않았으면 설치하라고 안내한다.
which "glyphIgo.py" > /dev/null
if [ "$?" == "1" ]
	then 
	echo "glyphIgo.py 가 없습니다."
	echo "https://github.com/pettarin/glyphIgo 에 가서 glyphIgo.py를 받으세요. glyphIgo.py를 PATH에 넣으면 됩니다."
	exit 1
fi

which "woff2_compress" > /dev/null
if [ "$?" == "1" ]
	then 
	echo "woff2_compress 가 없습니다."
	echo "https://github.com/google/woff2 에 가서 woff2_compress를 컴파일하세요. 그 뒤 woff2_compress를 PATH에 넣으면 됩니다."
	exit 1
fi


DIRNAME=$(dirname "$0")
cd $DIRNAME

# otf to ttf
# for font in fonts/original-fonts/*.otf
# 	do 
# 	filename=$(basename -s .otf "$font")
# 	glyphIgo.py convert -f "$font" -o fonts/original-fonts/"$filename".ttf
# 	echo fonts/original-fonts/"$filename".otf converted to "$filename".otf.
# done

# ttf
for font in fonts/original-fonts/*.ttf
	do 
		subset_name=$(basename -s .ttf "$font")
		if [ ! -f fonts/"$subset_name".subset.ttf ]; then
			# subset이 없으면 만든다.
		    glyphIgo.py subset -p glyph-list.txt -f "$font" -o fonts/"$subset_name".subset.ttf
		    echo fonts/"$subset_name".subset.ttf created.
		fi
done

# ttf to woff
for font in fonts/*.ttf
    do
    	name=$(basename -s .ttf "$font")
    	if [ ! -f fonts/"$name".woff ]; then
    		# woff가 없으면 만든다.
	    	glyphIgo.py convert -f "$font" -o fonts/"$name".woff
		fi
done

# ttf to woff2
for font in fonts/*.ttf
    do
    	name=$(basename -s .ttf "$font")
    	if [ ! -f fonts/"$name".woff2 ]; then
    		# woff가 없으면 만든다.
	    	woff2_compress "$font"
		fi
done