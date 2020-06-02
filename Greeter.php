<?php
function greet($names) :string
{
    $upperNames = [];
    $lowerNames = [];
    $default = 'my friend';

    if ($names == null)
    {
        return "Hello my friend";
    }

    if (is_array($names))
    {
        $result = '';
        foreach ($names as $name) {
            if($name == null){
                array_push($lowerNames, $default);
            } else {
                if ($name == strtoupper($name))
                {
                    array_push($upperNames, $name);
                } else {
                    array_push($lowerNames, $name);
                }
            }
        }

        if (count($lowerNames) > 0)
        {
            $result .= 'Hello';
            foreach ($lowerNames as $lowerName) {
                $result .= ' ' . $lowerName;
                if (count($lowerNames) > 1) {
                    if ($lowerName == $lowerNames[count($lowerNames)-2]) {
                        $result .= ' and';
                    } elseif ($lowerName != end($lowerNames)) {
                        $result .= ',';
                    }
                }
            }
        }

        if (count($upperNames) > 0)
        {
            $result .= '. HELLO';
            foreach ($upperNames as $upperName) {
                $result .= ' ' . $upperName;
                if (count($lowerNames) > 1) {
                    if ($upperName == $upperNames[count($upperNames)-2]) {
                        $result .= ' AND';
                    } elseif ($upperName != end($upperNames)) {
                        $result .= ',';
                    }
                }
            }
            $result .= '!';
        }

        return $result;
    }

    if($names == strtoupper($names)){
        return "HELLO " . $names;
    }
    
    return "Hello " . $names;
}