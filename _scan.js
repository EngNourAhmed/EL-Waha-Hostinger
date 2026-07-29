const fs = require('fs');
const path = require('path');

const root = process.cwd();
const skip = /(\\|\/)(vendor|node_modules|storage|\.git)(\\|\/)/;
const exts = ['.php', '.js', '.html', '.css'];
const rx = /9123 ?4567|96891234567|\+968|OMR|د\.إ|ر\.ع|Oman|عمان|عُمان|الإمارات|مسقط|AED|\b971\b/g;

function walk(dir, out = []) {
  for (const e of fs.readdirSync(dir, { withFileTypes: true })) {
    const p = path.join(dir, e.name);
    if (skip.test(p + path.sep)) continue;
    if (e.isDirectory()) walk(p, out);
    else if (exts.includes(path.extname(e.name))) out.push(p);
  }
  return out;
}

for (const f of walk(root)) {
  if (f.includes('composer.lock')) continue;
  const txt = fs.readFileSync(f, 'utf8');
  const m = txt.match(rx);
  if (m) console.log(path.relative(root, f), '=>', m.length, 'matches');
}
console.log('---- routes/web.php ----');
console.log(fs.readFileSync(path.join(root, 'routes', 'web.php'), 'utf8'));
