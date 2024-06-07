import MagicGrid from "magic-grid"

const magicGridSelector = document.querySelectorAll(".magicGrid");

if (magicGridSelector) {
    setTimeout(() => {
        magicGridSelector.forEach((e) => {
            if (e) {
                let magicGrid = new MagicGrid({
                    container: e,
                    static: true,
                    animate: false,
                    gutter: 0,
                    useTransform: false
                });

                magicGrid.listen();

                document.addEventListener("click", () => {
                    setTimeout(() => {
                        if (MagicGrid) {
                            magicGrid.listen();
                        }
                    }, 100);
                });
            }
        });
    }, 300);
}
