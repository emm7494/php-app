console.log('bing....');

let setThisYear = (queryString, parentElement) => {
    parentElement.querySelectorAll(queryString)
        .forEach(
            match => match.innerHTML = new Date().getFullYear()
        );
};

document.addEventListener('DOMContentLoaded', setThisYear('.this-year', globalThis.document));

function findPlaceholdersIn(scope) {
    return scope.querySelectorAll('.view-dim');
};

function insertContentAt(placeholder, content) {
    placeholder.innerHTML = content;
}

function showCurrentViewDimROH(entry) {
    const content = `<b>${globalThis.innerWidth} x ${globalThis.innerHeight}</b>`;

    findPlaceholdersIn(entry.target).forEach(placeholder => insertContentAt(placeholder, content));
}

const ro = new ResizeObserver(entries => {
    for (let entry of entries) {
        showCurrentViewDimROH(entry);
    }
    console.log('resize detected...');
});

ro.observe(globalThis.document.body);