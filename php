関数
・htmlspecialchars...悪意のあるコードが実行されないように、特殊文字に変換してくれる。
htmlspecialchars(返還対象,　変換パターン, 文字コード)で使う。

vim
・インサートモードにするにはiを押下
・インサートモードを解除するには左上のescボタンを押下
・:wエンターで保存
・:qエンターで脱出
・HJKLで移動
・ビジュアルモードは(v)を押下。指定した範囲をコピーできる。
・:wの後にスペース空けて新しいファイル名を書いてエンターで、新しいファイル名で保存してくれる。
・:qの後に!を付けてエンターすると、変更点を無視して強制的に終了することができる。
・:eの後にスペース空けて開きたいファイル名を書いてエンターで、別のファイルを開くことができる。
・ノーマルモードでgg押下で一番上に行く。Gで一番下に行く。
・ノーマルモードで、ctrl+fで一画面下に行く。ctrl+bで一画面上に行く。
・ノーマルモードで、w押下で一単語ずつ前に行く。b押下で一単語ずつ後ろに行く。
・^押下で行頭へ、$押下で行末へ行く。
・f+その行で行きたいアルファベット押下でその文字まで移動してくれる。
・{}の上で%押下で、該当する{}まで連れて行ってくれる。
・v押下で単語単位でのビジュアルモード。V押下で行単位でのビジュアルモード。ctrl+vで矩形単位でのビジュアルモード。
・x押下で一文字ずつ消える。(カット)。dd押下で一行消える。ddの前に数字を付けるとその分の行が消える。
・yy押下で一行コピー。yyの前に数字を付ければその分コピー。pで貼り付け。
・/検索したい用語で検索。n:下方向に検索。N:上方向に検索。
・*押下で今カーソルがある位置の単語を下方向に検索。#押下で上方向に検索。
・:s/変えたい箇所/変える単語/で置換できる。最後にgをつけるとその行で該当する箇所全てが置換される。
・:%s/変えたい箇所/変える単語/gでファイル全体という範囲で置換できる。gcにすると置換する前に確認される。
・u押下で直前の操作の取り消しができる。ctrl+rで復元できる。
・:spでウィンドウを縦方向に分割できる。:vsで横方向に分割。:closeで分割したウィンドウを閉じる。
・:tabnewでタブを新しく開く。
・:tabe 開きたい名前で開く。
・gt押下でタブ間の行き来ができる。
・tabcloseでそのタブを閉じることができる。
・.で直前の操作を繰り返す。
・=押下でインデントを揃えてくれる。(コードの改行やスペースを綺麗にしてくれる)。gg→v→G→=で文全体のインデントを揃えてくれる。
・インサートモード中にctrl + nでコードの補完をしてくれる。
・:set number押下で行番号が振られる。:set nonumberで消してくれる。
・syntax onでコードを色分けしてくれる。syntax offで戻す。
・:set tabstop=数字でタブの文字数を規定できる。(コードが見やすくなる時もある)
・
