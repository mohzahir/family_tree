import { IEventSystem } from "../../ts-common/events";
import { Id, SelectionEvents } from "../../ts-common/types";
import { DataEvents, IDataItem } from "../../ts-data";
import { Diagram, DiagramEvents, DiagramType, IAutoPlacement, IBaseCoords, ILineConfig, IShapeToolbarConfig } from "../../ts-diagram";
import { HistoryManager } from "./HistoryManager";
export declare type ViewMode = "preview" | "edit";
export interface IDiagramEditor {
    version: string;
    config: IDefaultEditorConfig | IOrgEditorConfig | IMindmapEditorConfig | IEditorConfig;
    events: IEventSystem<DataEvents | SelectionEvents | DiagramEvents | DiagramEditorEvents, IDiagramEditorHandlersMap>;
    diagram: Diagram;
    history: HistoryManager;
    paint(): void;
    import(diagram: Diagram): void;
    parse(data: IDataItem[]): void;
    serialize(): IDataItem[];
    zoomIn(step?: number): void;
    zoomOut(step?: number): void;
    setViewMode(mode: ViewMode): void;
}
export interface ITargetOption {
    selected: IDataItem | null;
    exclude?: Id | null;
    coord?: IBaseCoords;
}
export interface IEditorControls {
    apply?: boolean;
    reset?: boolean;
    export?: boolean;
    import?: boolean;
    autoLayout?: boolean;
    historyManager?: boolean;
    editManager?: boolean;
    scale?: boolean;
    gridStep?: boolean;
}
export declare type OrgToolbarTypes = "add" | "horizontal" | "vertical" | "remove";
export declare type MindmapToolbarTypes = "add" | "addLeft" | "addRight" | "remove";
export declare type RadialToolbarTypes = "add" | "remove";
export declare type DefaultToolbarTypes = "copy" | "connect" | "removePoint" | "remove";
export declare type OrgShapeToolbar = IShapeToolbarConfig[] | OrgToolbarTypes[] | boolean[] | (IShapeToolbarConfig | OrgToolbarTypes | boolean)[];
export declare type MindmapShapeToolbar = IShapeToolbarConfig[] | MindmapToolbarTypes[] | boolean[] | (IShapeToolbarConfig | MindmapToolbarTypes | boolean)[];
export declare type RadialShapeToolbar = IShapeToolbarConfig[] | RadialToolbarTypes[] | boolean[] | (IShapeToolbarConfig | RadialToolbarTypes | boolean)[];
export declare type DefaultShapeToolbar = IShapeToolbarConfig[] | DefaultToolbarTypes[] | boolean[] | (IShapeToolbarConfig | DefaultToolbarTypes | boolean)[];
export interface IEditorConfig {
    shapeType?: string;
    type?: DiagramType;
    gridStep?: number;
    reservedWidth: number;
    editMode?: boolean;
    lineGap?: number;
    defaults?: any;
    scale?: number;
    controls?: IEditorControls;
    lineConfig?: ILineConfig;
}
export interface IOrgEditorConfig extends IEditorConfig {
    type: "org";
    shapeToolbar?: boolean | OrgShapeToolbar;
    itemsDraggable?: boolean;
}
export interface IMindmapEditorConfig extends IEditorConfig {
    type: "mindmap";
    shapeToolbar?: boolean | MindmapShapeToolbar;
    itemsDraggable?: boolean;
}
export interface IDefaultEditorConfig extends IEditorConfig {
    type: "default";
    autoplacement?: IAutoPlacement;
    shapeBarWidth?: number;
    shapeSections?: IShapeSections;
    gapPreview?: string | number;
    scalePreview?: string | number;
    shapeToolbar: boolean | DefaultShapeToolbar;
}
export interface ISelectionBox {
    start: ICoords;
    end: ICoords;
}
export interface IShapeSections {
    [key: string]: any;
}
export interface ICoords {
    x: number;
    y: number;
}
export interface IDataHash {
    [id: string]: string | number | boolean;
}
export interface ISidebarConfig {
    showGridStep?: boolean;
}
export declare enum DiagramEditorEvents {
    resetButton = "resetButton",
    applyButton = "applyButton",
    undoButton = "undoButton",
    redoButton = "redoButton",
    shapeResize = "shapeResize",
    zoomIn = "zoomin",
    zoomOut = "zoomout",
    visibility = "visibility",
    shapesUp = "shapesUp",
    exportData = "exportData",
    importData = "importData",
    blockSelectionFinished = "blockSelectionFinished",
    blockSelectionAreaChanged = "blockSelectionAreaChanged",
    autoLayout = "autoLayout",
    changeGridStep = "changeGridStep",
    beforeShapeIconClick = "beforeShapeIconClick",
    afterShapeIconClick = "afterShapeIconClick",
    beforeLineTitleMove = "beforeLineTitleMove",
    afterLineTitleMove = "afterLineTitleMove",
    lineTitleMoveEnd = "lineTitleMoveEnd",
    beforeShapeMove = "beforeShapeMove",
    afterShapeMove = "afterShapeMove",
    shapeMoveEnd = "shapeMoveEnd",
    beforeGroupMove = "beforeGroupMove",
    afterGroupMove = "afterGroupMove",
    groupMoveEnd = "groupMoveEnd",
    beforeItemMove = "beforeItemMove",
    afterItemMove = "afterItemMove",
    itemMoveEnd = "itemMoveEnd",
    itemTarget = "itemTarget",
    beforeItemCatch = "beforeItemCatch",
    afterItemCatch = "afterItemCatch",
    /** @deprecated See a documentation: https://docs.dhtmlx.com/ */
    shapeMove = "shapemove"
}
export interface IDiagramEditorHandlersMap {
    [key: string]: (...args: any[]) => any;
    [DiagramEditorEvents.resetButton]: () => void;
    [DiagramEditorEvents.applyButton]: () => void;
    [DiagramEditorEvents.undoButton]: () => void;
    [DiagramEditorEvents.redoButton]: () => void;
    [DiagramEditorEvents.shapeResize]: () => void;
    [DiagramEditorEvents.zoomIn]: () => void;
    [DiagramEditorEvents.zoomOut]: () => void;
    [DiagramEditorEvents.visibility]: () => void;
    [DiagramEditorEvents.exportData]: () => void;
    [DiagramEditorEvents.importData]: (data: any) => void;
    [DiagramEditorEvents.shapesUp]: (shape: any) => void;
    [DiagramEditorEvents.changeGridStep]: (step: number) => void;
    [DiagramEditorEvents.beforeShapeIconClick]: (iconId: string, shape: IDataItem) => boolean | void;
    [DiagramEditorEvents.afterShapeIconClick]: (iconId: string, shape: IDataItem) => void;
    [DiagramEditorEvents.beforeLineTitleMove]: (event: PointerEvent, lineId: Id, titleId: Id, coord: IBaseCoords) => boolean | void;
    [DiagramEditorEvents.afterLineTitleMove]: (event: PointerEvent, lineId: Id, titleId: Id, coord: IBaseCoords) => void;
    [DiagramEditorEvents.lineTitleMoveEnd]: (event: PointerEvent, lineId: Id, titleId: Id, coord: IBaseCoords) => void;
    [DiagramEditorEvents.beforeShapeMove]: (event: MouseEvent, id: Id, coord: IBaseCoords) => boolean | void;
    [DiagramEditorEvents.afterShapeMove]: (event: MouseEvent, id: Id, coord: IBaseCoords) => void;
    [DiagramEditorEvents.shapeMoveEnd]: (event: MouseEvent, id: Id, coord: IBaseCoords) => void;
    [DiagramEditorEvents.beforeGroupMove]: (event: MouseEvent, id: Id, coord: IBaseCoords) => boolean | void;
    [DiagramEditorEvents.afterGroupMove]: (event: MouseEvent, id: Id, coord: IBaseCoords) => void;
    [DiagramEditorEvents.groupMoveEnd]: (event: MouseEvent, id: Id, coord: IBaseCoords) => void;
    [DiagramEditorEvents.beforeItemMove]: (event: PointerEvent, id: Id, coord: IBaseCoords, $mov: ICoords) => boolean | void;
    [DiagramEditorEvents.afterItemMove]: (event: MouseEvent, id: Id, coord: IBaseCoords) => void;
    [DiagramEditorEvents.itemMoveEnd]: (event: MouseEvent, id: Id, coord: IBaseCoords) => void;
    [DiagramEditorEvents.itemTarget]: (movedId: Id, targetId: Id, event: MouseEvent) => boolean | void;
    [DiagramEditorEvents.beforeItemCatch]: (movedId: Id, targetId: Id, event: MouseEvent) => boolean | void;
    [DiagramEditorEvents.afterItemCatch]: (movedId: Id, targetId: Id, event: MouseEvent) => void;
    /** @deprecated See a documentation: https://docs.dhtmlx.com/ */
    [DiagramEditorEvents.shapeMove]: () => void;
}
