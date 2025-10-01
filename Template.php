<?php
/**
 * Template
 * @author Gökhan Kaya <gkxdev@gmail.com>
 */

class Template {
    private $dir;
    private $data = [];
    private $file;

    public function __construct($dir = './templates/') {
        if (!is_dir($dir)) {
            if (!mkdir($dir, 0777, true)) {
                throw new Exception('Failed to create template directory.');
            }
        }

        $this->dir = $dir;
    }

    public function render($file, array $data = []) {
        $this->file = $this->dir . $file . '.php';

        if (!is_file($this->file)) {
            throw new Exception('Could not load file: ' . $this->file);
        }

        extract($data);

        ob_start();
        include $this->file;
        $buffer = ob_get_clean();

        return $buffer;
    }
}
