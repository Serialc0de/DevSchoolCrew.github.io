echo "/------------------START-------------------/"
version=$(<../dist/version.txt)
echo 'Cleaning the repository!'
echo $version
git checkout .
git pull
git checkout master
git pull
echo 'Building Woffice with Gulp'
gulp deploy
echo 'Zipping it'
cd ../dist/$version
zip -r ../../woffice-$version.zip woffice
echo "/------------------END--------------------/"