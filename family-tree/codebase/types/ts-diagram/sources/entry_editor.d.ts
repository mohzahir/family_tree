import "../../styles/diagram-editor.scss";
import "../../styles/menu.scss";
export { awaitRedraw } from "../../ts-common/dom";
export { DataCollection, DataEvents } from "../../ts-data";
export { shapes as DiagramShapes } from "./components/shapeFactory";
export { Diagram } from "../../ts-diagram";
import { View } from "../../ts-common/view";
import { IDefaultEditorConfig, IOrgEditorConfig, IMindmapEditorConfig, IDiagramEditor, DiagramEditorEvents, IDiagramEditorHandlersMap, IEditorConfig, HistoryManager, ViewMode } from "../../ts-diagram-editor";
import { IDataItem } from "../../ts-data";
import { IEventSystem } from "../../ts-common/events";
import { DataEvents, DiagramEvents, SelectionEvents } from "./types";
import { Diagram } from "../../ts-diagram";
export declare const i18n: any;
export declare class DiagramEditor extends View implements IDiagramEditor {
    version: string;
    config: IDefaultEditorConfig | IOrgEditorConfig | IMindmapEditorConfig | IEditorConfig;
    events: IEventSystem<DataEvents | SelectionEvents | DiagramEvents | DiagramEditorEvents, IDiagramEditorHandlersMap>;
    diagram: Diagram;
    history: HistoryManager;
    constructor(container: string | HTMLElement, config?: IDefaultEditorConfig | IOrgEditorConfig | IMindmapEditorConfig);
    paint(): void;
    import(diagram: Diagram): void;
    parse(data: IDataItem[]): void;
    serialize(): IDataItem[];
    zoomIn(step: number): void;
    zoomOut(step: number): void;
    setViewMode(mode: ViewMode): void;
}
