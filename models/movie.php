<?php


    class Movie{
        private $category;
        private $language;
        private $premiere;
        private $country;
        private $producer;


        function assignCategory(){
            $categoryName = "action";
            $this->category=$categoryName;
            return $this->category;
        }

        function assignLenguage(){

            $languageMovie = "English";
            $this->language=$languageMovie;
            return $this->language;
        }

        function assignPremiere(){

            $premiereMovie = "2014";
            $this->premiere=$premiereMovie;
            return $this->premiere;
        }

        function assignCountry(){

            $countryMovie = "EEUU";
            $this->country=$countryMovie;
            return $this->country;
        }


        function assignProducer(){

            $producerMovie = "Basil Iwanyk, David Leitch, Eva Longoria, Michael Witherill";
            $this->producer=$producerMovie;
            return $this->producer;
        }

    }

?>