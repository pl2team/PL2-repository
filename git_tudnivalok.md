#Git tudnivalók
-------------------------------------------------

git init

Ezzel létrehozom a helyi adatbázis

git clone https://github.com/pl2team/PL2-repository.git

Ezzel leklónozom a távoli szervert (csak egyszer kell megcsinálni)

cd PL2-repository

Ezzel benavigálok a letöltött mappába, mert abba kell majd dolgozni

git remote -v

inket, hogy biztosan jó-e. Az egyik a fetch végû, a másik a push végû.

git checkout develop

Ezzel arra az ágra váltok, amiben majd dolgozni kell.

--------------------------------------------------------

git pull origin develop
Ezzel lementem a távoli szerver aktuális állapotát

git add .
Ezzel berakok minden (új elemet) a commitolásra várókhoz.

git status -s
Ezzel megnézem, hogy van-e nem commitolt, vagy nem pussolt adatom.
Ha van A jellel, akkor

git commit -m "Kovspec feltoltese"
ezzel létrehozom a commitot

Utolsó lépés:
git push origin develop
ezzel töltõdik fel 



