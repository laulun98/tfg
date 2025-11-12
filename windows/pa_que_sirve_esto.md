# PORQUE

Me he dejado el cargador del portátil en casa y no tengo batería, paula xdd
Llevo toda la tarde para instalar node y poder usar vue, empece a las 5 y son las 8, toy harta.
Pero weno, si necesitas usarlo en algun lado que no puedas instalar node (por permisos o lo que sea), haz esto:
(También si necesitas usarlo en cualquier otro repo, copiate la carpeta y yata, que tmb viene bien)
# COMO USAR

```powershell

cd windows
.\node_insti.ps1

```

- Si te dice que no se pueden ejecutar scripts, pon esto:

```powershell

Set-ExecutionPolicy -Scope Process -ExecutionPolicy Bypass

```

(solo sirve para esta sesión, cuando cierres visual se vuelven a poner los permisos)

ESTO NO INSTALA NODE EN EL ORDENADOR, PERO PERMITE EJECUTARLO SIN NECESIDAD DE PERMISOS NI COSAS RARAS

# AHORA SE PUEDE USAR

```powershell
npm install
npm run dev
```

y más cosas