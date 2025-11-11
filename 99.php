<?php
header('Content-Type: text/html; charset=utf-8');
?>
<!doctype html>
<html lang="zh-Hant">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>九九乘法表</title>
  <style>
    body { font-family: "Microsoft JhengHei", "Noto Sans TC", Arial, sans-serif; padding:20px; }
    table { border-collapse: collapse; width: 100%; max-width: 720px; }
    td, th { border: 1px solid #ddd; padding: 8px; text-align: center; }
    th { background: #f7f7f7; }
    caption { font-size: 1.25em; margin-bottom: 8px; }
    @media print { body { padding: 0; } table { width: 100%; } }
  </style>
</head>
<body>

  <h1>九九乘法表P2</h1>
  <p>此頁使用 PHP 迴圈動態產生 1 × 1 到 9 × 9 的乘法表。</p>
  <table aria-label="九九乘法表">
    <caption>1 到 9 的乘法結果</caption>
    <?php for ($i = 1; $i <= 9; $i++): ?>
      <tr>
        <?php for ($j = 1; $j <= 9; $j++): ?>
          <td><?php echo htmlspecialchars("{$i} × {$j} = " . ($i * $j), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?></td>
        <?php endfor; ?>
      </tr>
    <?php endfor; ?>
  </table>
</body>
</html>
