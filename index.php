<?php



/* 初回コミット用 2017.08.05 */

/* 親リポを更新 2017.08.05 */

/* マージテスト　2017.08.05 */

/* forkでの変更をマージする 2017.08.05 */

$logs = 'テスト';

$stdout = fopen('php://stdout', 'w');
fwrite($stdout, '[datatrans] ' . $logs);
