<?php
class Character {
    public $name;
    public $class;
    public $level;
    public $race;
    public $background;
    public $alignment;
    public $experience;
    public $attributes = [];

    public function __construct($data) {
        $this->name = $data['name'] ?? '';
        $this->class = $data['class'] ?? '';
        $this->level = $data['level'] ?? 1;
        $this->race = $data['race'] ?? '';
        $this->background = $data['background'] ?? '';
        $this->alignment = $data['alignment'] ?? '';
        $this->experience = $data['experience'] ?? 0;
        $this->attributes = $data['attributes'] ?? [];
    }

    public function isValid() {
        return !empty($this->name) && !empty($this->class) && !empty($this->race);
    }
}
?>