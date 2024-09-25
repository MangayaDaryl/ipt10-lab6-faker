<?php

class FileUtility {
  
    public static function writeToFile(string $filename, array $data): void {
        $file = fopen($filename, 'w');
        foreach ($data as $row) {
            fputcsv($file, $row);
        }
        fclose($file);
    }
  
    public static function readFromFile(string $filename): array {
        $rows = [];
        if (($file = fopen($filename, 'r')) !== false) {
            while (($row = fgetcsv($file)) !== false) {
                $rows[] = $row;
            }
            fclose($file);
        }
        return $rows;
    }
}

?>
