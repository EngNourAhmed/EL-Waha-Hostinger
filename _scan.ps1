$ErrorActionPreference = 'Stop'
$files = Get-ChildItem -Path . -Recurse -File -Include *.php,*.js,*.html,*.css,*.blade.php |
  Where-Object { $_.FullName -notmatch '\\(vendor|node_modules|storage)\\' }
foreach ($f in $files) {
  $rel = $f.FullName.Replace((Get-Location).Path + '\', '')
  $hits = Select-String -Path $f.FullName -Pattern '9123 ?4567|96891234567|\+968|OMR|د\.إ|ر\.ع|Oman|عمان|عُمان|الإمارات|مسقط|AED|971' -Encoding UTF8 -AllMatches
  if ($hits) {
    Write-Output ("$rel => " + $hits.Count + " lines")
  }
}
Write-Output "---- routes ----"
Get-ChildItem routes -File | ForEach-Object { Write-Output $_.Name }
Get-Content routes\web.php -Encoding UTF8
