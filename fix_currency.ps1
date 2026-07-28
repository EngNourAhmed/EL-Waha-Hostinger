$welcomePath = "resources\views\welcome.blade.php"
$adminPath   = "resources\views\admin.blade.php"

# Fix welcome.blade.php
$w = [System.IO.File]::ReadAllText($welcomePath, [System.Text.Encoding]::UTF8)
$w = $w.Replace('AED', 'OMR')
$w = $w.Replace('د.إ', 'ر.ع.')
[System.IO.File]::WriteAllText($welcomePath, $w, [System.Text.Encoding]::UTF8)
Write-Host "welcome.blade.php: AED -> OMR done"

# Fix admin.blade.php
$a = [System.IO.File]::ReadAllText($adminPath, [System.Text.Encoding]::UTF8)
$a = $a.Replace('AED', 'OMR')
[System.IO.File]::WriteAllText($adminPath, $a, [System.Text.Encoding]::UTF8)
Write-Host "admin.blade.php: AED -> OMR done"
