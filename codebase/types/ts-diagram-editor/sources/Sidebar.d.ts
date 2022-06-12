import { Diagram } from "../../ts-diagram";
import { ISidebarConfig } from "./types";
export declare class Sidebar {
    protected _config: ISidebarConfig;
    protected _events: any;
    private _ui;
    private _diagram;
    private _selectItem;
    constructor(diagram: Diagram, config?: ISidebarConfig, events?: any);
    setValues(): void;
    getValues(): void;
    clear(): void;
    empty(): void;
    select(id: string): void;
    isItemsSelected(): boolean;
    getUI(): any;
    paint(): void;
    private _updateData;
}
