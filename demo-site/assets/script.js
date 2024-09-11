$(function() {
    const pasteButton = $('button.paste');
    const urlField = $('input.url');
    pasteButton.on('click', async (event) => {
        event.preventDefault()
        try{
            const text = await navigator.clipboard.readText()
            urlField.val(text);
            console.log('Pasted Successfully')
        }catch (error){
            console.log('Failed To read the clipboard!')
        }
       
    })
})