<?php
/*
 * The MIT License
 *
 * Copyright 2022 Martha Ribeiro Locks.
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */
class Doctors_model extends CI_Model
{
    private $table = "doctors";

    public function listAll($orderByName = true, $groupBy = false)
    {
        $this->setupSQL($orderByName, $groupBy);

        return $this->getResults();
    }

    public function searchAll($term, $orderByName = true)
    {
        $this->setupSQL($orderByName);

        if ($term) {
            $this->db->where("name LIKE '%$term%' OR lastname LIKE '%$term%'");
        }

        return $this->getResults();
    }

    public function orderAllBy($field, $orderBy)
    {

        $this->db->from($this->table);
        $this->db->order_by($field, $orderBy);

        return $this->getResults();
    }


    private function setupSQL($orderByName)
    {
        $this->db->from($this->table);

        if ($orderByName) {
            $this->db->order_by('name', 'ASC');
        }
    }

    protected function getResults()
    {
        $listEntities = array();

        $result = $this->db->get();

        if ($result->num_rows() > 0) {
            $listEntities = $result->result();
        }

        $result->free_result();

        return $listEntities;
    }
}
