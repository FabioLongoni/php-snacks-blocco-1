<?php 
$game1 = [
  'home' => 'Miami Heat',
  'guest' => 'Chicago Bulls',
  'homeScore' => 87,
  'guestScore' => 99
];

$games = [
  $game1,
  [
    'home' => 'Milwaukee Bucks',
    'guest' => 'Phoenix Suns',
    'homeScore' => 102,
    'guestScore' => 112
  ],
  [
    'home' => 'Toronto Raptors',
    'guest' => 'Boston Celtics',
    'homeScore' => 102,
    'guestScore' => 112
  ],
  [
    'home' => 'LA Lackers',
    'guest' => 'LA Clippers',
    'homeScore' => 105,
    'guestScore' => 104
  ]
];
//home - guest | homeScore - guestScore

?>

<ul>
  <?php 
    for ( $i=0; $i < count($games); $i++ ) {
      $info = $games[$i];
      ?>
      <li>
        <?php
          echo "{$info['home']} - {$info['guest']}";
        ?>
        |
        <span>
          <?php 
            echo "{$info['homeScore']} - {$info['guestScore']}";
          ?>
        </span>
      </li>
      <?php
    }
  ?>
</ul>