const masks = {
    cpf (value) {
        return value
        .replace(/\D/g, '')
        .replace(/(\d{3})(\d)/, '$1.$2')
        .replace(/(\d{3})(\d)/, '$1.$2')
        .replace(/(\d{3})(\d{1,2})/, '$1-$2')
    },
    
    data (value) {
        return value
        .replace(/\D/g, '')
        .replace(/(\d{2})(\d)/, '$1/$2')
        .replace(/(\d{2})(\d)/, '$1/$2')
    },
    
    telefone (value) {
        return value
        .replace(/\D/g, '')
        .replace(/(\d{2})(\d)/, '($1) $2')
        .replace(/(\d{5})(\d)/, '$1-$2')
    },
    
    celular (value) {
        return value
        .replace(/\D/g, '')
        .replace(/(\d{2})(\d)/, '($1) $2')
        .replace(/(\d{4})(\d)/, '$1-$2')
    },
    
    texto (value) {
        return value
        .replace(/[^a-z A-Z À-ÿ]/,'')
        
    },
    
    numero (value) {
        return value
        .replace(/[^1-9]/,'')
        
    },
    
    textoNumero (value) {
        return value
        .replace(/[^a-z A-Z À-ÿ 1-9]/,'')
        
    }


}

// \D = um valor que não seja número 

document.querySelectorAll('input').forEach(($input) => {
    const field = $input.dataset.type
    
    $input.addEventListener('input', (e) => {
        e.target.value = masks[field](e.target.value)
    }, false)
})
