function ehPalindromo(palavra) {
    const normalizado = palavra
        .toLowerCase()
        .normalize("NFD")
        .replace(/[^A-Za-z]/g, "");
    let palindromo = true;

    for (let i = 0; i < normalizado.length / 2; i++) {
        if (normalizado[i] !== normalizado[normalizado.length - i - 1]) {
            palindromo = false;
            break;
        }
    }

    console.log(
        `A palavra ${palavra}: ${
            palindromo ? "É é um palindromo" : "Não é um palindromo"
        } `
    );
}

ehPalindromo("Arara");
ehPalindromo("esse");
ehPalindromo("essa nao é");
