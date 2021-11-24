<?php

    namespace SayHi;

    class SayHi
    {
        public function hi()
        {
            $randoNum = rand(1,100);
            if ($randoNum < 30) { return "Hi!"; }
            else if ($randoNum < 60) { return "Привет!"; }
            else if ($randoNum < 100) { return "Hola!"; }
        }
    }
    