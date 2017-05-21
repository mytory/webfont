#!/bin/bash
# glyphIgo.py를 설치했는지 확인하고 설치하지 않았으면 설치하라고 안내한다.
which "glyphIgo.py" > /dev/null
if [ "$?" == "1" ]
	then 
	echo "glyphIgo.py 가 없습니다."
	echo "https://github.com/pettarin/glyphIgo 에 가서 glyphIgo.py를 받으세요. glyphIgo.py를 PATH에 넣으면 됩니다."
	exit 1
fi
DIRNAME=$(dirname "$0")
cd $DIRNAME

# ttf
for font in fonts/original-fonts/*.ttf
	do 
	subset_name=$(basename -s .ttf "$font")
	glyphIgo.py subset -p glyph-list.txt -f "$font" -o fonts/"$subset_name".subset.ttf
	echo fonts/"$subset_name".subset.ttf created.
done