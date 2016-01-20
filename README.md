# opencage-php-geocode
php script that makes use of the openCage geocoding library

# dependancies
this php script uses the openCage PHP library that you can download from github at
https://github.com/opencagedata/php-opencage-geocode

the openCage geocoder is an online resource , more info about the php library is here
http://geocoder.opencagedata.com/code.html#code-php 

# notes / usage
The openCage api allows for 2500 requests per day, you can pay for more 

my particular script requires that you create an array of addresses, to be more accurate it requires an array of arrays each sub array has the street address with state and zip, and a second field with the zip code separately.

my requirements were to output the coordinates, and the zip code separately as I was making a map with a retail stores list of customers (no address shown only the zip code)

I required the zip code because the requirement was to be able to filter by zip code, to see customers within a zip code.

