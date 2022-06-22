import { Id } from "../../ts-common/types";
import { Diagram } from "../../ts-diagram";
import { ISelectionBox } from "./types";
export declare class BlockSelection {
    private _diagram;
    private _diagramSize;
    private _isOrgType;
    constructor(diagram: Diagram);
    updateSelection(selection: ISelectionBox, mode?: "add" | "remove" | "create"): void;
    clearSelection(): void;
    add(id: Id): void;
    remove(id: Id): void;
    getSelected(): Id[];
    getCurrentCoordinates(event: PointerEvent, container: HTMLElement): {
        x: any;
        y: any;
        $rx: number;
        $ry: number;
    };
}
