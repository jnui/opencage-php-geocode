# opencage-php-geocode
php script that makes use of the openCage geocoding library

# dependancies
this php script uses the openCage PHP library that you can download from github at
https://github.com/opencagedata/php-opencage-geocode

the openCage geocoder is an online resource , more info about the php library is here
http://geocoder.opencagedata.com/code.html#code-php 

You need to get an API key from openCage - it is free to get an api key.
(place the key into the script otherwise the script will not work)

# notes / usage
The openCage free api allows for 2500 requests per day, you can pay for more 

This script will not work until you insert your openCage api Key into the script.

my particular script requires that you create an array of addresses, to be more accurate it requires an array of arrays each sub array has the street address with state and zip, and a second field with the zip code separately.

my requirements were to output the coordinates, and the zip code separately as I was making a map with a retail stores list of customers (no address shown only the zip code)

I required the zip code because the requirement was to be able to filter by zip code, to see customers within a zip code.

# possible improvements

the api is not fast - each request was at least a half second.
I think it would be good if I could make use of curl's new feature of being able to make more than one request at a time.
10 requests at a time would make this fly.

# output
this script will output each address as it gets the result by flushing cash
here is an example 
```PHP
[{"lat":41.9168584596, "long":-87.9037111844, "zip":60164 }, {"lat":41.9144342, "long":-87.9035065, "zip":60164 }, {}]
```