<?php
/**
 *  DVelum project http://dvelum.net, http://dvelum.ru, https://github.com/k-samuel/dvelum
 *  Copyright (C) 2011-2017  Kirill Yegorov
 *
 *  This program is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *   (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

class Dvelum_Shop_Product_Field_Boolean extends Dvelum_Shop_Product_Field
{
    /**
     * Validate Value
     * @param $value
     * @return boolean
     */
    public function isValid($value)
    {
        return true;
    }

    /**
     * Filter value
     * @param mixed $value
     * @return mixed
     */
    public function filter($value)
    {
        if($this->config['multivalue']){
            if(!is_array($value)){
                return [intval((boolean)$value)];
            }else{
                foreach ($value as &$item){
                    $item = intval((boolean)$item);
                }unset($item);
                return array_values($value);
            }
        }else{
            return intval((boolean)$value);
        }
    }
}