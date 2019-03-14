const toggleClasses = (content) => {
    const container = document.querySelector('.container-encyclopedia')
    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden')
        container.classList.remove('hide-overflow')
        content.classList.add('show')
        
    } else if (content.classList.contains('show')) {
        content.classList.remove('show')
        container.classList.add('hide-overflow')
        content.classList.add('hidden')
    }
}

const handleReveal = (el) => {
    const contentID = el.currentTarget.dataset.content
    const content = document.querySelector(`#content-${contentID}`)
    toggleClasses(content)
}

const handleClose = (el) => {
    const closestContent = el.currentTarget.parentElement
    toggleClasses(closestContent)
}

document.addEventListener("DOMContentLoaded", function (event) {
    const elements = document.querySelectorAll('.boxed.encyclopedia')
    const closeIcons = document.querySelectorAll('.ion-close')

    for (let el of elements) {
        el.addEventListener('click', handleReveal)
    }

    for (let icon of closeIcons) {
        icon.addEventListener('click', handleClose)
    }
})