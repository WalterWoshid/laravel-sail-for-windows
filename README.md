<!--suppress HtmlDeprecatedAttribute -->
<h1 align="center">Laravel Sail for Windows</h1>

<!-- Main badges -->
<p align="center">
  <!-- License: MIT -->
  <a href="https://opensource.org/licenses/MIT" target="_blank">
    <img 
      alt="License: MIT" 
      src="https://img.shields.io/badge/License-MIT-9C0000.svg?labelColor=ebdbb2&style=flat&logo=data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxNCIgaGVpZ2h0PSIxNCI+PHBhdGggdmVjdG9yLWVmZmVjdD0ibm9uLXNjYWxpbmctc3Ryb2tlIiBkPSJNMCAyLjk5NWgxLjI4djguMDFIMHpNMi41NCAzaDEuMjh2NS4zNEgyLjU0em0yLjU1LS4wMDVoMS4yOHY4LjAxSDUuMDl6bTIuNTQuMDA3aDEuMjh2MS4zMzZINy42M3oiIGZpbGw9IiM5YzAwMDAiLz48cGF0aCB2ZWN0b3ItZWZmZWN0PSJub24tc2NhbGluZy1zdHJva2UiIGQ9Ik03LjYzIDUuNjZoMS4yOFYxMUg3LjYzeiIgZmlsbD0iIzdjN2Q3ZSIvPjxwYXRoIHZlY3Rvci1lZmZlY3Q9Im5vbi1zY2FsaW5nLXN0cm9rZSIgZD0iTTEwLjE3NyAzLjAwMmgzLjgyNnYxLjMzNmgtMy44MjZ6bS4wMDMgMi42NThoMS4yOFYxMWgtMS4yOHoiIGZpbGw9IiM5YzAwMDAiLz48L3N2Zz4="
    >
  </a>

  <!-- Twitter: @WalterWoshid -->
  <a href="https://twitter.com/WalterWoshid" target="_blank">
    <img 
      alt="Twitter: @WalterWoshid" 
      src="https://img.shields.io/badge/@WalterWoshid-Twitter?labelColor=ebdbb2&style=flat&logo=twitter&logoColor=458588&color=458588&label=Twitter"
    >
  </a>

  <!-- PHP: ^8.0 -->
  <a href="https://www.php.net" target="_blank">
    <img 
      alt="PHP: ^8.0" 
      src="https://img.shields.io/badge/PHP-^8.0-4C5789.svg?labelColor=ebdbb2&style=flat&logo=php&logoColor=4C5789"
    > 
  </a>

  <!-- Packagist -->
  <a href="https://packagist.org/packages/walterwoshid/laravel-sail-for-windows" target="_blank">
    <img 
      alt="Packagist" 
      src="https://img.shields.io/packagist/v/walterwoshid/laravel-sail-for-windows?label=Packagist&labelColor=ebdbb2&style=flat&color=fe8019&logo=packagist"
    >
  </a>
</p>

<h2 align="center">Windows (PowerShell) support for Laravel Sail on Windows.</h2>



## Installation

```shell
composer require --dev walterwoshid/laravel-sail-for-windows
```



## Usage

- Run the `.\vendor\bin\sail.ps1` script in your PowerShell terminal.

- You can run `.\vendor\bin\sail.ps1 artisan vendor:publish --tag=sail-bin` to
  copy the script to your project root and use `.\sail.ps1` instead.

- You can also add a `sail` alias to your PowerShell profile to run the script.
  - Run in PowerShell:
  ```shell
  notepad $profile
  ```
  - Add the following line to your PowerShell profile:
  ```powershell
  New-Alias sail .\vendor\bin\sail.ps1
  ```
  - Save and close the file.
  - Run `sail` instead of `.\vendor\bin\sail.ps1` in your terminal.



## Show your support

Give a ⭐ if this project helped you!



## 📝 License
Copyright © 2023 [Valentin Wotschel](https://github.com/WalterWoshid).<br>
This project is [MIT](https://opensource.org/licenses/MIT) licensed.
