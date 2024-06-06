/*
|--------------------------------------------------------------------------
| Template Name: Wedding
|--------------------------------------------------------------------------
| This is the copy-assets task (assets to be copied to public folder)
|--------------------------------------------------------------------------
*/

const fs = require('fs-extra');
const path = require('path');

const sourceBase = path.resolve(process.cwd(), "resources");
const destBase = path.resolve(process.cwd(), "public");

const paths = [
    { name: "base", source: "base", dest: "" },
    { name: "images", source: "images", dest: "images" },
];

paths.forEach(({ name, source, dest }) => {
    const sourcePath = path.resolve(sourceBase, source);
    const destPath = path.resolve(destBase, dest);

    fs.copy(sourcePath, destPath, (err) => {
        if (err) {
            console.log(err);
        }
        else {
            console.log(`Copied ${name} from ${sourcePath} to ${destPath}`);
        }
    });
});
