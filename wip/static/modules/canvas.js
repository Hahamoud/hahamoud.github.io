function create(id, parent, width, height) {
    let divWrapper = document.createElement('div'),
        canvasElem = document.createElement('canvas'),
        ctx = canvasElem.getContext('2d');

    parent.appendChild(divWrapper);
    divWrapper.appendChild(canvasElem);

    divWrapper.id = id;
    canvasElem.width = width;
    canvasElem.height = height;

    return {
        ctx: ctx,
        id: id
    };
}

function createReportList(wrapperId) {
    let list = document.createElement('ul'),
        canvasWrapper = document.getElementById(wrapperId);

    list.id = wrapperId + '-reporter';
    canvasWrapper.appendChild(list);

    return list.id;
}

export { create, createReportList };