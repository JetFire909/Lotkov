const MOUNTAINS = [

    {name: "Kilimanjaro", height: 5895, country: "Tanzania"},

    {name: "Everest", height: 8848, country: "Nepal"},

    {name: "Mount Fuji", height: 3776, country: "Japan"},

    {name: "Mont Blanc", height: 4808, country: "Italy/France"},

    {name: "Vaalserberg", height: 323, country: "Netherlands"},

    {name: "Denali", height: 6168, country: "United States"},

    {name: "Popocatepetl", height: 5465, country: "Mexico"}

];

class TextCell {
    constructor(text) {
    this.text = text.split("\n");
    }
    minWidth() {
    return this.text.reduce((max, line) => Math.max(max, line.length), 0);
    }
    minHeight() {
    return this.text.length;
    }
    draw(width, height) {
    let result = [];
    for (let i = 0; i < height; i++) {
        let line = this.text[i] || "";
        result.push(line.padEnd(width));
    }
    return result;
    }
}

class UnderlinedCell extends TextCell {
    constructor(text) {
    super(text);
    }
    inHeight() {
    return super.minHeight() + 1;
    }
    draw(width, height) {
    let result = super.draw(width, height - 1);
    result.push("-".repeat(width));
    return result;
    }
}

class RTextCell extends TextCell {
    draw(width, height) {
    let result = [];
    for (let i = 0; i < height; i++) {
        let line = this.text[i] || "";
        result.push(line.padStart(width));
    }
    return result;
    }
}

function rowHeights(rows) {
  return rows.map(row => row.reduce((max, cell) => Math.max(max, cell.minHeight()), 0));
}

function colWidths(rows) {
  return rows[0].map((_,i) => rows.reduce((max, row) => Math.max(max, row[i].minWidth()), 0));
}

function drawTable(rows) {
    const heights = rowHeights(rows);
    const widths = colWidths(rows);

    function drawLine(blocks, lineNo) {
    return blocks.map(block => block[lineNo]).join(" ");
    }

    function drawRow(row, rowNum) {
    let blocks = row.map((cell, colNum) => cell.draw(widths[colNum], heights[rowNum]));
    return blocks[0].map((_, lineNo) => drawLine(blocks, lineNo)).join("\n");
    }

    return rows.map(drawRow).join("\n");
}

function dataTable(data) {
    let keys = Object.keys(data[0]);
    let headers = keys.map(name => new UnderlinedCell(name));
  
    let body = data.map(row => {
    return keys.map(name => {
        let value = row[name];
        if (typeof value == "number") {
        return new RTextCell(String(value));
        } else {
        return new TextCell(String(value));
        }
    });
    });
    return [headers, ...body];
}

console.log(drawTable(dataTable(MOUNTAINS)));
