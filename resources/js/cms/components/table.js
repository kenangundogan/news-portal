function tableColumnFilter(selected) {
    document.querySelectorAll("td[data-name=" + selected.id + "]").forEach(function (item) {
        if (selected.checked) {
            item.classList.remove("hidden");
        } else {
            item.classList.add("hidden");
        }
    });
}


function tableVerticalHorizontalScroll() {
    const tables = document.querySelectorAll("table");
    tables.forEach(table => {
        if (!table) { return; }
        const theadtrtd = table.querySelectorAll("thead tr td");
        if (!theadtrtd) { return; }
        theadtrtd.forEach(td => {
            if (!td.querySelector("div")) { return; }
            td.addEventListener("click", function () {
                const index = Array.prototype.indexOf.call(this.parentElement.children, this);
                const tbodytrtd = table.querySelectorAll("tbody tr td:nth-child(" + (index + 1) + ")");
                this.classList.toggle("bg-gray-50");
                this.classList.toggle("whitespace-pre");
                tbodytrtd.forEach(td => {
                    td.classList.toggle("bg-gray-50");
                    td.classList.toggle("whitespace-pre");
                    const tddiv = td.querySelector("div");
                    if (tddiv) {
                        if (tddiv.classList.contains("break-all")) {
                            tddiv.classList.remove("break-all");
                        }
                        else {
                            tddiv.classList.add("break-all");
                        }
                    }
                });
            });
        });
    });
}


tableVerticalHorizontalScroll();
window.tableColumnFilter = tableColumnFilter;
window.tableVerticalHorizontalScroll = tableVerticalHorizontalScroll;
