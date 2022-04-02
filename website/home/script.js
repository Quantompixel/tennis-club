const container = document.querySelector("main section");

const courts = [].filter.call(container.childNodes, (node) => {
    return node.nodeName == "DIV";
})

/**
 * document
 * .getElementById('two')
 * .scrollIntoView({ behavior: 'smooth' });
 */


