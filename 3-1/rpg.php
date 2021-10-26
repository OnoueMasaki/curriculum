<?php
    class Enemy {
        public $name;
        public $stamina;
        public $attack;
        public static $count = 0;

        public function __construct($nakami_name, $nakami_stamina = 100, $nakami_attack = 10) {
            $this->name = $nakami_name;
            $this->stamina = $nakami_stamina;
            $this->attack = $nakami_attack;
            Self::$count += 1;
        }

        public static function getEnemyCount() {
            echo Self::$count.'体の敵を作りました！';
        }

        public function sayMyName() {
            echo '私の名前は'.$this->name.'でスタミナは'.$this->stamina.'攻撃力は'.$this->attack.'です。';
        }

        public function powerUp() {
            $this->attack += 10;
            echo '攻撃力が'.$this->attack.'になった。<br>';
        }
    }

    class Boss extends Enemy {
        public function sayMyName() {
            echo 'ボスの'.$this->name.'があらわれた！';
        }

        public function specialAttack() {
            echo 'すごい強い一撃！';
        }
    }
    //　勇者まさき
    $yuusya = new Enemy("まさき");
    $yuusya->sayMyName();
    echo $yuusya->stamina;
    echo $yuusya->attack;
    $yuusya->powerUp();
    $yuusya->powerUp();

    // ボス竜王
    echo '<br>';
    $boss = new Boss('竜王');
    $boss->sayMyName();
    $yuusya->sayMyName();
    $boss->specialAttack();

    Enemy::getEnemyCount();
    $slime_A = new Enemy('スライム');
    $slime_B = new Enemy('スライム');
    $slime_C = new Enemy('スライム');
    $slime_D = new Enemy('スライム');
    Enemy::getEnemyCount();
?>