<?php
class Uploader
{
    public function make()
    {
        return $this->format();
    }

    private function format()
    {
        $files = [];
        foreach ($_FILES as $field) {
            if (is_array($field['name'])) {
                foreach ($field['name'] as $id => $file) {
                    $files[] = [
                        'name'=>$field['name'][$id],
                        'type'=>$field['type'][$id],
                        'tmp_name'=>$field['tmp_name'][$id],
                        'error'=>$field['error'][$id],
                        'size'=>$field['size'][$id],
                    ];
                }
            } else {
                $files[] = $field;
            }
        }
        return $files;
    }
}