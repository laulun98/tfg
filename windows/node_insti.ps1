# node_activate.ps1
# Ejecuta esto dentro de la terminal de VS Code (PowerShell)

# Carpeta donde está Node portable
$NodeHome = "$PSScriptRoot\node_portable"

# Agrega Node al PATH de esta sesión
$env:PATH = "$NodeHome;$env:PATH"

# Opcional: comprobar que funciona
node -v
npm -v

Write-Host "`n✅ Node y NPM listos para usar en esta terminal`n"
